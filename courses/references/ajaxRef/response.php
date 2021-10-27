
<?php
  
  include_once "../../ajax.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AJAX</title>
  <link rel="stylesheet" type="text/css" href="../../main.css">
  <link rel="stylesheet" type="text/css" href="main.css">
    <script src="../../main.js"></script>
</head>
<body>
	<div class="main">
  <table class="selectors">
  <tr>
    <th style="width:20%">Selector</th>
    <th style="width:20%">Example</th>
    <th>Example description</th>
  </tr>
  <tr>
    <td><a href="sel_class.asp">.<i>class</i></a></td>
    <td class="notranslate">.intro</td>
    <td>Selects all elements with class=&quot;intro&quot;</td>
  </tr>
  <tr>
    <td><em>.class1.class2</em></td>
    <td class="notranslate">.name1.name2</td>
    <td>Selects all elements with both <em>name1</em> and <em>name2</em> set 
    within its class attribute</td>
  </tr>  
  <tr>
    <td><em>.class1 .class2</em></td>
    <td class="notranslate">.name1 .name2</td>
    <td>Selects all elements with <em>name2</em> that is a descendant of an 
    element with <em>name1</em></td>
  </tr>  
  <tr>
    <td><a href="sel_id.asp">#<i>id</i></a></td>
    <td class="notranslate">#firstname</td>
    <td>Selects the element with id=&quot;firstname&quot;</td>
  </tr>  <tr>
    <td><a href="sel_all.asp">*</a></td>
    <td class="notranslate">*</td>
    <td>Selects all elements</td>
  </tr>
  <tr>
    <td><i><a href="sel_element.asp">element</a></i></td>
    <td class="notranslate">p</td>
    <td>Selects all &lt;p&gt; elements</td>
  </tr>
  <tr>
    <td><i><a href="sel_element_class.asp">element.class</a></i></td>
    <td class="notranslate">p.intro</td>
    <td>Selects all &lt;p&gt; elements with class=&quot;intro&quot;</td>
  </tr>
  <tr>
    <td><i><a href="sel_element_comma.asp">element,element</a></i></td>
    <td class="notranslate">div, p</td>
    <td>Selects all &lt;div&gt; elements and all &lt;p&gt; elements</td>
  </tr>
  <tr>
    <td><a href="sel_element_element.asp"><i>element</i> <i>element</i></a></td>
    <td class="notranslate">div p</td>
    <td>Selects all &lt;p&gt; elements inside &lt;div&gt; elements</td>
  </tr>
  <tr>
    <td><a href="sel_element_gt.asp"><i>element</i>&gt;<i>element</i></a></td>
    <td class="notranslate">div &gt; p</td>
    <td>Selects all &lt;p&gt; elements where the parent is a &lt;div&gt; element</td>
  </tr>
  <tr>
    <td><a href="sel_element_pluss.asp"><i>element</i>+<i>element</i></a></td>
    <td class="notranslate">div + p</td>
    <td>Selects the first &lt;p&gt; element that is placed immediately after &lt;div&gt; elements</td>
  </tr>
  <tr>
    <td><a href="sel_gen_sibling.asp"><i>element1</i>~<i>element2</i></a></td>
    <td>p ~ ul</td>
    <td>Selects every &lt;ul&gt; element that is preceded by a &lt;p&gt; element</td>
  </tr>
  <tr>
    <td><a href="sel_attribute.asp">[<i>attribute</i>]</a></td>
    <td class="notranslate">[target]</td>
    <td>Selects all elements with a target attribute</td>
  </tr>
  <tr>
    <td><a href="sel_attribute_value.asp">[<i>attribute</i>=<i>value</i>]</a></td>
    <td class="notranslate">[target=_blank]</td>
    <td>Selects all elements with target=&quot;_blank&quot;</td>
  </tr>
  <tr>
    <td><a href="sel_attribute_value_contains.asp">[<i>attribute</i>~=<i>value</i>]</a></td>
    <td class="notranslate">[title~=flower]</td>
    <td>Selects all elements with a title attribute containing the word &quot;flower&quot;</td>
  </tr>
  <tr>
    <td><a href="sel_attribute_value_lang.asp">[<i>attribute</i>|=<i>value</i>]</a></td>
    <td class="notranslate">[lang|=en]</td>
    <td>Selects all elements with a lang attribute value equal to &quot;en&quot; or 
    starting with &quot;en-&quot;</td>
  </tr>
  <tr>
    <td><a href="sel_attr_begin.asp">[<i>attribute</i>^=<i>value</i>]</a></td>
    <td>a[href^=&quot;https&quot;]</td>
    <td>Selects every &lt;a&gt; element whose href attribute value begins with &quot;https&quot;</td>
  </tr>
  <tr>
    <td><a href="sel_attr_end.asp">[<i>attribute</i>$=<i>value</i>]</a></td>
    <td>a[href$=&quot;.pdf&quot;]</td>
    <td>Selects every &lt;a&gt; element whose href attribute value ends with &quot;.pdf&quot;</td>
  </tr>
  <tr>
    <td><a href="sel_attr_contain.asp">[<i>attribute</i>*=<i>value</i>]</a></td>
    <td>a[href*=&quot;w3schools&quot;]</td>
    <td>Selects every &lt;a&gt; element whose href attribute value contains the substring &quot;w3schools&quot;</td>
  </tr>
  <tr>
    <td><a href="sel_active.asp">:active</a></td>
    <td class="notranslate">a:active</td>
    <td>Selects the active link</td>
  </tr>
  <tr>
    <td><a href="sel_after.asp">::after</a></td>
    <td class="notranslate">p::after</td>
    <td>Insert something after the content of each &lt;p&gt; element</td>
  </tr>
</table>
</div>

</body>
</html>