(function($) {
  var _stack = 0,
  _lastID = 0,
  _generateID = function() {
    _lastID++;
    return 'materialize-dialog-overlay-' + _lastID;
  };

  var methods = {
    init : function(options) {
      var defaults = {
        opacity: 0.5,
        inDuration: 350,
        outDuration: 250,
        ready: undefined,
        complete: undefined,
        confirm: undefined,
        dismissible: false,
        startingTop: '4%',
        endingTop: '10%'
      };

      // Override defaults
      options = $.extend(defaults, options);

      return this.each(function() {
        var $dialog = $(this);
        var dialog_id = $(this).attr("id") || '#' + $(this).data('target');

        var closedialog = function() {
          var overlayID = $dialog.data('overlay-id');
          var $overlay = $('#' + overlayID);
          $dialog.removeClass('open');

          // Enable scrolling
          $('body').css({
            overflow: '',
            width: ''
          });

          $dialog.find('.dialog-close').off('click.close');
          $(document).off('keyup.dialog' + overlayID);

          $overlay.velocity( { opacity: 0}, {duration: options.outDuration, queue: false, ease: "easeOutQuart"});


          // Define Bottom Sheet animation
          var exitVelocityOptions = {
            duration: options.outDuration,
            queue: false,
            ease: "easeOutCubic",
            // Handle dialog ready callback
            complete: function() {
              $(this).css({display:"none"});

              // Call complete callback
              if (typeof(options.complete) === "function") {
                options.complete.call(this, $dialog);
              }
              $overlay.remove();
              _stack--;
            }
          };
          $dialog.velocity({ 
            top: options.startingTop, opacity: 0, scaleX: 0.7},
            exitVelocityOptions
          );
        };

        var confirmdialog = function() {
          var overlayID = $dialog.data('overlay-id');
          var $overlay = $('#' + overlayID);
          $dialog.removeClass('open');

          // Enable scrolling
          $('body').css({
            overflow: '',
            width: ''
          });

          $dialog.find('.dialog-confirm').off('click.close');
          $(document).off('keyup.dialog' + overlayID);

          $overlay.velocity( { opacity: 0}, {duration: options.outDuration, queue: false, ease: "easeOutQuart"});


          // Define Bottom Sheet animation
          var exitVelocityOptions = {
            duration: options.outDuration,
            queue: false,
            ease: "easeOutCubic",
            // Handle dialog ready callback
            complete: function() {
              $(this).css({display:"none"});

              // Call complete callback
              if (typeof(options.confirm) === "function") {
                options.confirm.call(this, $dialog);
              }
              $overlay.remove();
              _stack--;
            }
          };
          $dialog.velocity({ 
            top: options.startingTop, opacity: 0, scaleX: 0.7},
            exitVelocityOptions
          );
        };

        var opendialog = function($trigger) {
          var $body = $('body');
          var oldWidth = $body.innerWidth();
          $body.css('overflow', 'hidden');
          $body.width(oldWidth);

          if ($dialog.hasClass('open')) {
            return;
          }

          var overlayID = _generateID();
          var $overlay = $('<div class="dialog-overlay"></div>');
          lStack = (++_stack);

          // Store a reference of the overlay
          $overlay.attr('id', overlayID).css('z-index', 1000 + lStack * 2);
          $dialog.data('overlay-id', overlayID).css('z-index', 1000 + lStack * 2 + 1);
          $dialog.addClass('open');

          $("body").append($overlay);

          if (options.dismissible) {
            $overlay.click(function() {
              closedialog();
            });
            // Return on ESC
            $(document).on('keyup.dialog' + overlayID, function(e) {
              if (e.keyCode === 27) {   // ESC key
                closedialog();
              }
            });
          }

          $dialog.find(".dialog-close").on('click.close', function(e) {
            closedialog();
          });

          $dialog.find(".dialog-confirm").on('click.close', function(e) {
            confirmdialog();
          });

          $overlay.css({ display : "block", opacity : 0 });

          $dialog.css({
            display : "block",
            opacity: 0
          });

          $overlay.velocity({opacity: options.opacity}, {duration: options.inDuration, queue: false, ease: "easeOutCubic"});
          $dialog.data('associated-overlay', $overlay[0]);

          // Define Bottom Sheet animation
          var enterVelocityOptions = {
            duration: options.inDuration,
            queue: false,
            ease: "easeOutCubic",
            // Handle dialog ready callback
            complete: function() {
              if (typeof(options.ready) === "function") {
                options.ready.call(this, $dialog, $trigger);
              }
            }
          };
          if ($dialog.hasClass('bottom-sheet')) {
            $dialog.velocity({bottom: "0", opacity: 1}, enterVelocityOptions);
          }
          else {
            $.Velocity.hook($dialog, "scaleX", 0.7);
            $dialog.css({ top: options.startingTop });
            $dialog.velocity({top: options.endingTop, opacity: 1, scaleX: '1'}, enterVelocityOptions);
          }

        };

        // Reset handlers
        $(document).off('click.dialogTrigger', 'a[href="#' + dialog_id + '"], [data-target="' + dialog_id + '"]');
        $(this).off('opendialog');
        $(this).off('closedialog');

        // Close Handlers
        $(document).on('click.dialogTrigger', 'a[href="#' + dialog_id + '"], [data-target="' + dialog_id + '"]', function(e) {
          options.startingTop = ($(this).offset().top - $(window).scrollTop()) /1.15;
          opendialog($(this));
          e.preventDefault();
        }); // done set on click

        $(this).on('opendialog', function() {
          var dialog_id = $(this).attr("href") || '#' + $(this).data('target');
          opendialog();
        });

        $(this).on('closedialog', function() {
          closedialog();
        });
      }); // done return
    },
    open : function() {
      $(this).trigger('opendialog');
    },
    close : function() {
      $(this).trigger('closedialog');
    }
  };

  $.fn.dialog = function(methodOrOptions) {
    if ( methods[methodOrOptions] ) {
      return methods[ methodOrOptions ].apply( this, Array.prototype.slice.call( arguments, 1 ));
    } else if ( typeof methodOrOptions === 'object' || ! methodOrOptions ) {
      // Default to "init"
      return methods.init.apply( this, arguments );
    } else {
      $.error( 'Method ' +  methodOrOptions + ' does not exist on jQuery.dialog' );
    }
  };
})(jQuery);
