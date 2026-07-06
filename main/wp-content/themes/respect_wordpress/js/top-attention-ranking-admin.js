(function ($) {
  var initialized = false;
  var isSaving = false;

  function setStatus(message, isError) {
    var $status = $('#rf-theme-top-attention-ranking-status');
    if (!$status.length) {
      return;
    }

    $status.text(message || '');
    $status.css('color', isError ? '#b32d2e' : '#646970');
  }

  function syncOrder($list, $input) {
    var order = $list.sortable('toArray').map(function (itemId) {
      return itemId.replace('rf-theme-top-attention-ranking-', '');
    });
    $input.val(order.join(','));
    return order;
  }

  function saveOrder(order) {
    var settings = window.rfThemeTopAttentionRankingAdmin || {};

    if (
      isSaving ||
      !settings.ajaxUrl ||
      !settings.nonce ||
      !settings.postId ||
      !order.length
    ) {
      return;
    }

    isSaving = true;
    setStatus('並び順を保存中...', false);

    $.post(settings.ajaxUrl, {
      action: 'rf_theme_save_top_attention_ranking_order',
      nonce: settings.nonce,
      post_id: settings.postId,
      order: order.join(',')
    })
      .done(function (response) {
        if (response && response.success) {
          setStatus('並び順を保存しました。', false);
          return;
        }

        setStatus('並び順の保存に失敗しました。', true);
      })
      .fail(function () {
        setStatus('並び順の保存に失敗しました。', true);
      })
      .always(function () {
        isSaving = false;
      });
  }

  function initSortable() {
    var $list = $('#rf-theme-top-attention-ranking-sortable');
    var $input = $('#rf-theme-top-attention-ranking-order');
    var $form = $('#post');

    if (
      initialized ||
      !$list.length ||
      !$input.length ||
      typeof $list.sortable !== 'function'
    ) {
      return false;
    }

    $list.sortable({
      axis: 'y',
      containment: 'parent',
      helper: 'clone',
      tolerance: 'pointer',
      update: function () {
        saveOrder(syncOrder($list, $input));
      }
    });

    syncOrder($list, $input);
    if ($form.length) {
      $form.on('submit.rfThemeTopAttentionRanking', function () {
        syncOrder($list, $input);
      });
    }

    $(document).on('click.rfThemeTopAttentionRanking', '.editor-post-publish-button, .editor-post-publish-panel__toggle, .editor-post-save-draft, .editor-post-update-button', function () {
      syncOrder($list, $input);
    });

    initialized = true;
    return true;
  }

  function watchForMetabox() {
    if (initSortable()) {
      return;
    }

    var observer = new MutationObserver(function () {
      if (initSortable()) {
        observer.disconnect();
      }
    });

    observer.observe(document.body, {
      childList: true,
      subtree: true
    });

    window.setTimeout(function () {
      observer.disconnect();
      initSortable();
    }, 5000);
  }

  $(initSortable);
  $(window).on('load', initSortable);

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', watchForMetabox);
  } else {
    watchForMetabox();
  }
})(jQuery);
