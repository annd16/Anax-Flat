---
views:

    byline:
        region: after-main
        template: default/byline
        sort: 1
        data:
            author: "Anna"
            meta:
                type: author

author: Anna

titleBreadcrumb: Test
...



A test page    
-----------

<p> This page can be used for different tests, like getting acquainted with the anax-flat frame work, the grid-system,
the markdown language, CSS and LESS. At present it shows some use of nested columns/rows in the grid-system and some simple features of the LESS language. </p>

<div class="wrap">
    <h3>Nested columns</h3>

    <div class="row">
        <div class="col"><span>column</span></div>
        <div class="col"><span>column</span></div>
        <div class="col"><span>column</span></div>
        <div class="col-nested">
            <div class="row-nested">
                <div class="block"><span>nested block1</span></div>
                <div class="block"><span>nested block2</span></div>
                <div class="block"><span>nested block3</span></div>
                <div class="block"><span>nested block4</span></div>
            </div>
        </div>
        <div class="col"><span>column</span></div>
    </div>
</div>

<div class="wrap">
    <h3>Nested columns</h3>

    <div class="row2">
    <div class="col2"><span>column</span></div>
    <div class="col2"><span>column</span></div>
    <div class="col2"><span>column</span></div>
    <div class="col2"><span>column</span></div>
    <div class="col2-nested">
            <div class="row2-nested">
                <div class="block2"><span>article</span></div>
            </div>
        </div>
    </div>
</div>

###Mixins
<div class="div1"> div1 with a background-color of grey. </div>
<div class="div2"> div2 with a blue text-color. </div>
<div class="div3"> div3 - an example of a <i>mixin</i>. </div><br/>

###Operations

<div class="div4"> A div with background-color = #336699 </div>
<div class="div5"> A div with background-color = #336699/3 = #112244  </div><br/>

###Loop
<div class="div6"> A loop sets the height of this div. </div><br/>

<div class="div7"> This div has the background-color: #111 </div>
<div class="div8"> A loop sets the background-color of this div. </div>
<div class="div9"> A loop sets the background-color of this div. </div>
<div class="div10"> A loop sets the background-color of this div. </div>
<div class="div11"> A loop sets the background-color of this div. </div><br/>

<!-- <div class="div12"> Place for columns??</div>
<col class="column-1">Column</col>
<col class="column-2">Column</col>
<col class="column-3">Column</col>
<col class="column-4">Column</col> -->
