$(function() {
      //tab mode

      $(document).on('click', '.tabs__header li a', function(e) {

        var activeTab = $(this).attr("href");
        var $tabs = $(this).parents(".tabs");
        e.preventDefault();

        $tabs.find(".tabs__content").hide();
        $tabs.find(activeTab).fadeIn();

        $tabs.find(".tabs__header li.active").removeClass("active");
        $(this).parent("li").addClass("active");

        $tabs.find(".tabs__accordion-heading.active").removeClass("active");
        $tabs.find(".tabs__accordion-heading[rel^='"+activeTab+"']").addClass("active");

      });

    /* acoordion mode */

    $(document).on('click', '.tabs__accordion-heading', function(e) {

        var activeTab = $(this).attr("rel");
        var $tabs = $(this).parents(".tabs");
        e.preventDefault();

        $tabs.find(".tabs__content").hide();
        $tabs.find("#"+activeTab).fadeIn();

        $tabs.find(".tabs__accordion-heading.active").removeClass("active");
        $(this).addClass("active");

        $tabs.find(".tabs__header li.active").removeClass("active");
        $tabs.find(".tabs__header li[rel^='"+activeTab+"']").addClass("active");

      });
  });
