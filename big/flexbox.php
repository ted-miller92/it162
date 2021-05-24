<?php include "includes/header.php";?>

<div class="flexWrapper">
    <article>   
    <p>Anyone who has tried to design a page with CSS knows the struggle of lining elements up just how you want them. You make sure they are each the right width and height, then you adjust margins, padding, position and float properties to give the page the perfect look. After hours of work you resize the browser window and everything on the page jumbles around and you’re rudely reminded that you didn’t even consider designing your layout for mobile devices, let alone any different screen sizes. </p>

<p>More experienced designers and developers will tell you about the days of using tables to format the layout of a web page. Before that, authors [1] placed invisible images with a height of 1 pixel in order to space out content on a page! Compared to that, floating content and adjusting margins doesn’t seem so bad, but luckily for us, we have even better, more elegant solutions for creating beautiful pages.</p>

<p>CSS Flexbox is a layout tool that allows for dynamic adjustment of content as screens change size or orientation. It allows for developers to easily create the layout they want that will adjust to the screen of tablets or mobile devices. It isn’t strictly for this purpose either. The following is a simple way to create a nice navigation bar with easily adjustable spacing. </p>

<p>The following HTML provides the content of a basic navigation bar. The contents of a Flexbox must be contained in an element. That element must have the display attribute set to “flex.” In this example the div with the class “navContainer” will be the Flex container. </p>
<pre>
<code>
&lt;div class="navContainer"&gt;
&lt;a class="nav" href=#&gt;Home&lt;/a&gt;
&lt;div class="subContainer"&gt;
      	&lt;a class="nav" href=#&gt;About&lt;/a&gt;
           	&lt;a class="nav" href=#&gt;Portfolio&lt;/a&gt;
        	&lt;a class="nav" href=#&gt;Contact&lt;/a&gt;
&lt;/div&gt;
&lt;a class="nav" href=#&gt;Login&lt;/a&gt;
&lt;/div&gt;
</code>
</pre>
<p>All the direct “children” of this container, known as “flex items,” can now be manipulated using a number of different properties. Below, the attribute “justify-content” is set to “space-between,” which spaces the flex items evenly with all the extra space not taken up allocated between the elements. </p>
<pre>
<code>
.navContainer{
   display:flex;
   justify-content:space-between;
   align-items:center;
   background-color:#AA9;
}
</code>
</pre>
<p>The “justify-content” can also be set to a number of other settings, like “flex-start,” “flex-end,” “space-around,” and “space-evenly.”</p>

<p>The following image shows the results of just a few simple CSS rules (other styling added too).</p>

<p>In this example, I’ve set it up so the three links to “About,” “Portfolio,” and “Contact” are contained in a “sub container.” This groups those three together in the middle. Just for another example, here is the same navigation bar with the “justify-content” set to “space-around.” You can see the space within the flexbox is evenly distributed around the flex items, not just between them. </p>

<p>This only scratches the surface of Flexbox. Lots of aspects can be manipulated, like flex-direction, how items are aligned within the box, and how the elements behave in different sized windows and viewports. It is a powerful tool for designing responsively and it automates a lot of the steps required to make adaptive web pages. </p>

</article>
<aside>
    <h3>Works Cited</h3>
    <ul>
        <li>
            <p>Anderson, Stephen D., “Web Layout history”, CSS Grid-Layout, Accessed May, 2021,<a href="http://grid-layout.com/history.html">Link</a></p>
        </li>
        <li>
            <p>Coyier, Chris, “A Complete Guide to Flexbox,” Css Tricks, April, 2013, updated April, <a href="2021 https://css-tricks.com/snippets/css/a-guide-to-flexbox/">Link</a></p>
        </li>
    </ul>
</aside>

</div>

<?php include "includes/footer.php";?>