Hello

<br/>

{foreach from=$people item=p}
	{$p}
{/foreach}


<ul>
{foreach from=$myArray item=foo}
    <li>{$foo}</li>
{/foreach}
</ul>

<ul>
{foreach $myColors as $color}
    <li>{$color}</li>
{/foreach}
</ul>
<!-- PEOPLE array with key and value-->
<h2>People array with key and value </h2>
<ul>
{foreach $myPeople as $value}
   <li>{$value@key}: {$value}</li>
{/foreach}
</ul>

<!-- ANOTHER WAY HOW TO LOOP THROUGH AN ARRAY !!!!!!!!!
	also you can loop like this:
	{foreach $myPeople key=k item=value}
		{$k} = {$value} <br/>
	{/foreach}
-->
{*  I am a smarty commetn, I don't exist in the compield output 
<!-- THIS CODE IS DEPRICATED and unsafe!!!!
{php}
	echo 1;
{/php}
-->
*}



<pre>
User Information:

Name: {$name}
Address: {$address}

</pre>

<h3>Alternation of the assign content</h3>
<pre>
Name: {$name|capitalize}
Addr: {$address|escape}
Date: {$smarty.now|date_format: "%A %D, %Y"}
Month: {$smarty.now|date_format:"%c"}

{$smarty.now|date_format:"%d.%m.%Y"}

</pre>

{* include file="footer.tpl" *}