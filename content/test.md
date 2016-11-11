---
views:
    byline:
        region: after-main
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline

    breadcrumb:
        region: breadcrumb
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline

    sidebar-l:
        region: sidebar-left
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline

    sidebar-r:
        region: sidebar-right
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline

        flash:
        region: flash
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline

...


A test page
-------------------

This page can be used for different tests, like getting acquainted with the anax-flat frame work    
and the markdown language. At present it shows some of the existing regions on the web-page.
