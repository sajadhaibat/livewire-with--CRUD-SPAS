/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./public/js/sidebar.js":
/*!******************************!*\
  !*** ./public/js/sidebar.js ***!
  \******************************/
/***/ (() => {

/*
Author       : Dreamguys
Template Name: SmartHR - Bootstrap Admin Template
Version      : 3.5
*/
$(document).ready(function () {
  // Variables declarations
  var $wrapper = $('.main-wrapper');
  var $pageWrapper = $('.page-wrapper');
  var $slimScrolls = $('.slimscroll'); // Sidebar

  var Sidemenu = function Sidemenu() {
    this.$menuItem = $('#sidebar-menu a');
  };

  function init() {
    var $this = Sidemenu;
    $('#sidebar-menu a').on('click', function (e) {
      if ($(this).parent().hasClass('submenu')) {
        e.preventDefault();
      }

      if (!$(this).hasClass('subdrop')) {
        $('ul', $(this).parents('ul:first')).slideUp(350);
        $('a', $(this).parents('ul:first')).removeClass('subdrop');
        $(this).next('ul').slideDown(350);
        $(this).addClass('subdrop');
      } else if ($(this).hasClass('subdrop')) {
        $(this).removeClass('subdrop');
        $(this).next('ul').slideUp(350);
      }
    });
    $('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
  } // Sidebar Initiate


  init(); // Mobile menu sidebar overlay

  $('body').append('<div class="sidebar-overlay"></div>');
  $(document).on('click', '#mobile_btn', function () {
    $wrapper.toggleClass('slide-nav');
    $('.sidebar-overlay').toggleClass('opened');
    $('html').addClass('menu-opened');
    $('#task_window').removeClass('opened');
    return false;
  });
  $(".sidebar-overlay").on("click", function () {
    $('html').removeClass('menu-opened');
    $(this).removeClass('opened');
    $wrapper.removeClass('slide-nav');
    $('.sidebar-overlay').removeClass('opened');
    $('#task_window').removeClass('opened');
  }); // Chat sidebar overlay

  $(document).on('click', '#task_chat', function () {
    $('.sidebar-overlay').toggleClass('opened');
    $('#task_window').addClass('opened');
    return false;
  }); // Select 2

  if ($('.select').length > 0) {
    $('.select').select2({
      minimumResultsForSearch: -1,
      width: '100%'
    });
  } // Modal Popup hide show


  if ($('.modal').length > 0) {
    var modalUniqueClass = ".modal";
    $('.modal').on('show.bs.modal', function (e) {
      var $element = $(this);
      var $uniques = $(modalUniqueClass + ':visible').not($(this));

      if ($uniques.length) {
        $uniques.modal('hide');
        $uniques.one('hidden.bs.modal', function (e) {
          $element.modal('show');
        });
        return false;
      }
    });
  } // Floating Label


  if ($('.floating').length > 0) {
    $('.floating').on('focus blur', function (e) {
      $(this).parents('.form-focus').toggleClass('focused', e.type === 'focus' || this.value.length > 0);
    }).trigger('blur');
  } // Sidebar Slimscroll


  if ($slimScrolls.length > 0) {
    $slimScrolls.slimScroll({
      height: 'auto',
      width: '100%',
      position: 'right',
      size: '7px',
      color: '#ccc',
      wheelStep: 10,
      touchScrollStep: 100
    });
    var wHeight = $(window).height() - 60;
    $slimScrolls.height(wHeight);
    $('.sidebar .slimScrollDiv').height(wHeight);
    $(window).resize(function () {
      var rHeight = $(window).height() - 60;
      $slimScrolls.height(rHeight);
      $('.sidebar .slimScrollDiv').height(rHeight);
    });
  } // Page Content Height


  var pHeight = $(window).height();
  $pageWrapper.css('min-height', pHeight);
  $(window).resize(function () {
    var prHeight = $(window).height();
    $pageWrapper.css('min-height', prHeight);
  }); // Date Time Picker

  if ($('.datetimepicker').length > 0) {
    $('.datetimepicker').datetimepicker({
      format: 'DD/MM/YYYY',
      icons: {
        up: "fa fa-angle-up",
        down: "fa fa-angle-down",
        next: 'fa fa-angle-right',
        previous: 'fa fa-angle-left'
      }
    });
  } // Datatable


  if ($('.datatable').length > 0) {
    $('.datatable').DataTable({
      "bFilter": false
    });
  } // Tooltip


  if ($('[data-toggle="tooltip"]').length > 0) {
    $('[data-toggle="tooltip"]').tooltip();
  } // Email Inbox


  if ($('.clickable-row').length > 0) {
    $(".clickable-row").click(function () {
      window.location = $(this).data("href");
    });
  } // Check all email


  $(document).on('click', '#check_all', function () {
    $('.checkmail').click();
    return false;
  });

  if ($('.checkmail').length > 0) {
    $('.checkmail').each(function () {
      $(this).on('click', function () {
        if ($(this).closest('tr').hasClass('checked')) {
          $(this).closest('tr').removeClass('checked');
        } else {
          $(this).closest('tr').addClass('checked');
        }
      });
    });
  } // Mail important


  $(document).on('click', '.mail-important', function () {
    $(this).find('i.fa').toggleClass('fa-star').toggleClass('fa-star-o');
  }); // Summernote

  if ($('.summernote').length > 0) {
    $('.summernote').summernote({
      height: 200,
      // set editor height
      minHeight: null,
      // set minimum height of editor
      maxHeight: null,
      // set maximum height of editor
      focus: false // set focus to editable area after initializing summernote

    });
  } // Task Complete


  $(document).on('click', '#task_complete', function () {
    $(this).toggleClass('task-completed');
    return false;
  }); // Multiselect

  if ($('#customleave_select').length > 0) {
    $('#customleave_select').multiselect();
  }

  if ($('#edit_customleave_select').length > 0) {
    $('#edit_customleave_select').multiselect();
  } // Leave Settings button show


  $(document).on('click', '.leave-edit-btn', function () {
    $(this).removeClass('leave-edit-btn').addClass('btn btn-white leave-cancel-btn').text('Cancel');
    $(this).closest("div.leave-right").append('<button class="btn btn-primary leave-save-btn" type="submit">Save</button>');
    $(this).parent().parent().find("input").prop('disabled', false);
    return false;
  });
  $(document).on('click', '.leave-cancel-btn', function () {
    $(this).removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
    $(this).closest("div.leave-right").find(".leave-save-btn").remove();
    $(this).parent().parent().find("input").prop('disabled', true);
    return false;
  });
  $(document).on('change', '.leave-box .onoffswitch-checkbox', function () {
    var id = $(this).attr('id').split('_')[1];

    if ($(this).prop("checked") == true) {
      $("#leave_" + id + " .leave-edit-btn").prop('disabled', false);
      $("#leave_" + id + " .leave-action .btn").prop('disabled', false);
    } else {
      $("#leave_" + id + " .leave-action .btn").prop('disabled', true);
      $("#leave_" + id + " .leave-cancel-btn").parent().parent().find("input").prop('disabled', true);
      $("#leave_" + id + " .leave-cancel-btn").closest("div.leave-right").find(".leave-save-btn").remove();
      $("#leave_" + id + " .leave-cancel-btn").removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
      $("#leave_" + id + " .leave-edit-btn").prop('disabled', true);
    }
  });
  $('.leave-box .onoffswitch-checkbox').each(function () {
    var id = $(this).attr('id').split('_')[1];

    if ($(this).prop("checked") == true) {
      $("#leave_" + id + " .leave-edit-btn").prop('disabled', false);
      $("#leave_" + id + " .leave-action .btn").prop('disabled', false);
    } else {
      $("#leave_" + id + " .leave-action .btn").prop('disabled', true);
      $("#leave_" + id + " .leave-cancel-btn").parent().parent().find("input").prop('disabled', true);
      $("#leave_" + id + " .leave-cancel-btn").closest("div.leave-right").find(".leave-save-btn").remove();
      $("#leave_" + id + " .leave-cancel-btn").removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
      $("#leave_" + id + " .leave-edit-btn").prop('disabled', true);
    }
  }); // Placeholder Hide

  if ($('.otp-input, .zipcode-input input, .noborder-input input').length > 0) {
    $('.otp-input, .zipcode-input input, .noborder-input input').focus(function () {
      $(this).data('placeholder', $(this).attr('placeholder')).attr('placeholder', '');
    }).blur(function () {
      $(this).attr('placeholder', $(this).data('placeholder'));
    });
  } // OTP Input


  if ($('.otp-input').length > 0) {
    $(".otp-input").keyup(function (e) {
      if (e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105) {
        $(e.target).next('.otp-input').focus();
      } else if (e.which == 8) {
        $(e.target).prev('.otp-input').focus();
      }
    });
  } // Small Sidebar


  $(document).on('click', '#toggle_btn', function () {
    if ($('body').hasClass('mini-sidebar')) {
      $('body').removeClass('mini-sidebar');
      $('.subdrop + ul').slideDown();
    } else {
      $('body').addClass('mini-sidebar');
      $('.subdrop + ul').slideUp();
    }

    return false;
  });
  $(document).on('mouseover', function (e) {
    e.stopPropagation();

    if ($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
      var targ = $(e.target).closest('.sidebar').length;

      if (targ) {
        $('body').addClass('expand-menu');
        $('.subdrop + ul').slideDown();
      } else {
        $('body').removeClass('expand-menu');
        $('.subdrop + ul').slideUp();
      }

      return false;
    }
  });
  $(document).on('click', '.top-nav-search .responsive-search', function () {
    $('.top-nav-search').toggleClass('active');
  });
  $(document).on('click', '#file_sidebar_toggle', function () {
    $('.file-wrap').toggleClass('file-sidebar-toggle');
  });
  $(document).on('click', '.file-side-close', function () {
    $('.file-wrap').removeClass('file-sidebar-toggle');
  });

  if ($('.kanban-wrap').length > 0) {
    $(".kanban-wrap").sortable({
      connectWith: ".kanban-wrap",
      handle: ".kanban-box",
      placeholder: "drag-placeholder"
    });
  }
}); // Loader

$(window).on('load', function () {
  $('#loader').delay(100).fadeOut('slow');
  $('#loader-wrapper').delay(500).fadeOut('slow');
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					result = fn();
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/resources/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			__webpack_require__.O();
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./public/js/sidebar.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;