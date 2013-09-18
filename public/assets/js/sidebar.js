var SideBar;
SideBar = (function ($, window) {
    "use strict";
    var chatUsersContainer, config, expadSidebar, handleSideBarAccordions, handleSideBarScroll, handleSideBarSubMenus, handleSideBarWidth, handleSidebarChatScroll, handleSidebarChatUsersFilter, handleSidebarChatUsersResize, handleUserSettingsContainer, init, isRTL, isSidebarMini, isSidebarFull, isSidebarAuto, isTouchDevice, reduceSidebar, sidebarScroll, socialBarContainer, userSettingsContainer, autoSidebar, handleMenuTooltip;
    config = {
        shortenOnClickOutside   : true,
        sidebarContainer        : $(".sidebar"),
        userSettingsContainer   : $(".sidebar .user-settings"),
        sidebarScrollContainer  : $(".sidebar-content .scrollable"),
        chatUsersContainer      : $(".sidebar").find(".chat-users"),
        sidebarClassFull        : 'sidebar-full',
        sidebarClassMini        : 'sidebar-mini',
        sidebarClassAuto        : 'sidebar-auto',
        screenMode              : 'sidebar-mini'
    };
    socialBarContainer = config.sidebarContainer;
    userSettingsContainer = config.userSettingsContainer;
    sidebarScroll = config.sidebarScrollContainer;
    chatUsersContainer = config.chatUsersContainer;
    isTouchDevice = function () {
        if (("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch) {
            return true;
        } else {
            return false;
        }
    };
    isSidebarFull = function () {
        return $('body').hasClass(config.sidebarClassFull) && !$('body').hasClass(config.sidebarClassAuto);
    };
    isSidebarMini = function () {
        return $('body').hasClass(config.sidebarClassMini) && !$('body').hasClass(config.sidebarClassAuto);
    };
    isSidebarAuto = function () {
        return $('body').hasClass(config.sidebarClassAuto);
    };
    isRTL = function () {
        return $("body").hasClass('rtl');
    };
    init = function (options) {
        $.extend(config, options);
        handleUserSettingsContainer();
        handleSideBarWidth();
        handleSideBarAccordions();
        handleSideBarSubMenus();
        handleSideBarScroll();
        // handleSidebarChatScroll();
        // handleSidebarChatUsersResize();
        // handleSidebarChatUsersFilter();

        if(!$.cookie('screenMode')){
            $.cookie('screenMode', config.screenMode);
        }

        $('body').addClass($.cookie('screenMode'));

        if($('body').hasClass(config.sidebarClassAuto)){
            $('body').addClass(config.sidebarClassMini);
        }
        handleMenuTooltip();
        $('.navigation-sidebar a').attr('data-original-title', $('.navigation-sidebar a').data($.cookie('screenMode'))).tooltip();

    };
    handleUserSettingsContainer = function () {
        userSettingsContainer.find(".user-settings-content").on("click", function (e) {
            e.stopPropagation();
            userSettingsContainer.toggle();
        });
        userSettingsContainer.find(".user-settings-footer a").on("click", function (e) {
            e.stopPropagation();
            userSettingsContainer.toggle();
        });
        userSettingsContainer.clickOutside(function (event, obj) {
            if (event.target.className.indexOf("trigger-user-settings") >= 0) {
                obj.toggle();
            } else {
                obj.hide();
            }
        });
    };
    expadSidebar = function () {
        // var marginLeft, marginRight;
        $("body").css("overflow-x", "hidden");
        // chatUsersContainer.find(".user-filter .dropdown-toggle").dropdown();
        // if (isSidebarAuto() && $(window).width() >= 979) {
        //     if (isRTL()) {
        //         marginLeft = -146;
        //     } else {
        //         marginRight = -146;
        //     }
        // } else {
        //     if (isRTL()) {
        //         marginLeft = 0;
        //     } else {
        //         marginRight = 0;
        //     }
        // }
        $("body").addClass(config.sidebarClassFull).removeClass(config.sidebarClassMini);
        // if (isRTL()) {
        //     $("#main").css("margin-left", marginLeft).css("margin-right", 200);
        //     $(".social-navbar").css("right", 200);
        // } else {
        //     $("#main").css("margin-right", marginRight).css("margin-left", 200);
        //     $(".social-navbar").css("left", 200);
        // }
    };
    reduceSidebar = function () {
        // var marginRight;
        // userSettingsContainer.hide();
        // chatUsersContainer.find(".user-filter .btn-group").attr('class', 'btn-group dropup');
        // // socialBarContainer.find(".accordion-body.in").collapse("hide");
        // if (isSidebarAuto() && $(window).width() >= 979) {
        //     marginRight = -20;
        // } else {
        //     marginRight = 0;
        // }
        $("body").removeClass(config.sidebarClassFull).addClass(config.sidebarClassMini);
        // if (isRTL()) {
        //     $("#main").css("margin-left", 0).css("margin-right", 54);
        //     $(".social-navbar").css("right", 54);
        // } else {
        //     $("#main").css("margin-right", 0).css("margin-left", 54);
        //     $(".social-navbar").css("left", 54);
        // }
    };
    autoSidebar = function() {
        $("body").removeClass(config.sidebarClassFull).removeClass(config.sidebarClassMini).addClass(config.sidebarClassAuto);
    };
    handleSideBarWidth = function () {
        $(document).on('click', ".navigation-sidebar", function () {
            if (isSidebarFull()) {
                $('body').removeClass(config.sidebarClassAuto);
                reduceSidebar();
                $.cookie('screenMode', config.sidebarClassMini);

            } else if(isSidebarMini()){
                autoSidebar();
                $.cookie('screenMode', config.sidebarClassAuto);
            }else{
                $('body').removeClass(config.sidebarClassAuto);
                expadSidebar();
                $.cookie('screenMode', config.sidebarClassFull);
            }
            $('.navigation-sidebar a').attr('data-original-title', $('.navigation-sidebar a').data($.cookie('screenMode'))).tooltip('fixTitle').tooltip('show');
            handleMenuTooltip();
            return false;
        });
        // $(".search-sidebar img, .search-sidebar i, .user-filter .dropdown-toggle").click(function () {
        //     expadSidebar();
        //     return false;
        // });
        if (isTouchDevice === true) {
            sidebarScroll.find(".navigation-sidebar").show();
        } else {
            socialBarContainer.on("mouseleave", function (event) {
                if (($(window).width() >= 979) && isSidebarAuto()) {
                    reduceSidebar();
                }
                return false;
            });
            socialBarContainer.on("mouseenter", function (event) {
                if (($(window).width() >= 979) && isSidebarAuto()) {
                    expadSidebar();
                }
                return false;
            });
        }
        if (config.shortenOnClickOutside === true) {
            socialBarContainer.clickOutside(function (event, obj) {
                if ($(window).width() >= 979) {
                    reduceSidebar();
                }
            });
        }
        socialBarContainer.on("show", function () {
            expadSidebar();
        });
        $(window).resize(function () {
            if ($(window).width() < 979) {
                //expadSidebar();
            }
        });
    };
    handleSideBarAccordions = function () {
        $(".accordion-body").on("show.bs.collapse", function () {
            $(this).parent().find(".accordion-toggle").addClass("opened");
            // $('body').removeClass(config.sidebarClassMini).addClass(config.sidebarClassFull);

            // if (!$(".wraper").hasClass("sidebar-full")) {
            //     $(".sidebar").addClass("sidebar-full");
            //     $(".wraper").addClass("sidebar-full");
            //     $(".wraper").addClass("sidebar-icon");
            // }
        });
        $(".accordion-body").on("hide.bs.collapse", function () {
            $(this).parent().find(".accordion-toggle").removeClass("opened");
            // if ($(".wraper").hasClass("sidebar-icon")) {
            //     $(".sidebar").removeClass("sidebar-full");
            //     $(".wraper").removeClass("sidebar-full");
            // }
        });
    };
    handleSideBarSubMenus = function () {
        $("[data-toggle='sub-menu-collapse']").click(function () {
            var target;
            target = $($(this).attr("data-target"));
            if (target.hasClass("in")) {
                $(this).removeClass("opened");
                target.removeClass("in");
            } else {
                $(this).addClass("opened");
                target.addClass("in");
            }
        });
    };
    handleSideBarScroll = function () {
        var fixeSidebarScroll, resizeHandler, sidebarScrollOptions;
        sidebarScroll.css("height", $(window).height() - chatUsersContainer.height());
        sidebarScrollOptions = {
            height: $(window).height() - chatUsersContainer.outerHeight(),
            size: "8px",
            railVisible: true,
            railColor: "#000"
        };
        if (isRTL()) {
            sidebarScrollOptions.position = 'left';
        }
        resizeHandler = function () {
            var windowHeight;
            windowHeight = $(window).height();
            sidebarScroll.css("height", (windowHeight - chatUsersContainer.outerHeight()) + "px");
            $(".sidebar-content").find(".slimScrollDiv").css("height", (windowHeight - chatUsersContainer.outerHeight()) + "px");
        };
        fixeSidebarScroll = function () {
            if ($(window).width() <= 979) {
                $(".sidebar .slimScrollDiv").attr('style', '');
                if (socialBarContainer.hasClass("in")) {
                    sidebarScroll.css("height", $(window).height() - $(".social-navbar").height());
                    $(".sidebar-content").css("height", $(document).height());
                }
            }
        };
        sidebarScroll.slimscroll(sidebarScrollOptions);
        $(window).resize(function () {
            var windowWidth = $(window).width();
            if (windowWidth > 979) {
                // expadSidebar();
                resizeHandler();
                sidebarScroll.attr("style", "");
            }else{
                // reduceSidebar();
            }
            fixeSidebarScroll();
        });
        socialBarContainer.on("show", function () {
            sidebarScroll.css("height", $(window).height() - $(".social-navbar").height());
            fixeSidebarScroll();
        });
        $(".sidebar .accordion-body").on("shown", function () {
            if ($(window).width() <= 979) {
                sidebarScroll.css("height", $(window).height());
            } else {
                sidebarScroll.css("height", $(window).height() - chatUsersContainer.outerHeight());
            }
            sidebarScroll.slimscroll(sidebarScrollOptions);
        });
        $(".sidebar .accordion-body").on("hidden", function () {
            if ($(window).width() <= 979) {
                sidebarScroll.css("height", $(window).height());
            } else {
                sidebarScroll.css("height", $(window).height() - chatUsersContainer.outerHeight());
            }
            sidebarScroll.slimscroll(sidebarScrollOptions);
        });
        sidebarScroll.bind("slimscrolling", function (e, pos) {
            userSettingsContainer.hide();
        });
    };
    handleSidebarChatScroll = function () {
        var chatScrollOptions;
        chatScrollOptions = {
            height: chatUsersContainer.find(".user-list").height(),
            size: "8px",
            railColor: "#000",
            wheelStep: 15
        };
        if (isRTL()) {
            chatScrollOptions.position = 'left';
        }
        $(".user-list").slimscroll(chatScrollOptions);
    };
    handleSidebarChatUsersResize = function () {
        if (!$().resizable) {
            return;
        }
        chatUsersContainer.resizable({
            handles: "n",
            maxHeight: 400,
            minHeight: 110,
            resize: function (event, ui) {
                var currentHeight, padding;
                currentHeight = ui.size.height;
                padding = 3;
                $(this).height(currentHeight);
                $(this).css('top', 'auto');
                chatUsersContainer.find('.slimScrollDiv, .user-list').height(currentHeight - 42);
                sidebarScroll.parent().height($(window).height() - currentHeight - padding);
                sidebarScroll.height($(window).height() - currentHeight - padding);
            }
        });
    };
    handleSidebarChatUsersFilter = function () {
        if (!$().liveFilter) {
            return;
        }
        chatUsersContainer.find(".user-list").liveFilter(".chat-users .user-filter input.input-filter", "li", {
            filterChildSelector: "a",
            after: function () {
                if ($('.user-list li:visible').length === 0) {
                    chatUsersContainer.find(".no-user").show();
                } else {
                    chatUsersContainer.find(".no-user").hide();
                }
            }
        });
    };
    handleMenuTooltip = function() {
        $('.sidebar .menu a').removeAttr('data-original-title');

        if(isSidebarMini()){
            $('.sidebar .menu a').each(function(idx, elm){
                $(elm).attr('data-original-title', $(elm).find('span').html()).tooltip({
                    placement: 'right',
                    container: 'body'
                });
            });
        }
    };
    return {
        init: init,
        isTouchDevice: isTouchDevice
    };
})(jQuery, window);