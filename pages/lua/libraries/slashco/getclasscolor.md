<function name="GetClassColor" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the color used to display a slasher class in UI.<br>
		Returns the "unknown" color if `class` is <page>SlashCo.SlasherClass</page>`.Unknown`, otherwise the regular "known" color.
	</description>
	<realm>Shared</realm>
	<group>Colors</group>
	<args>
		<arg name="class" type="number">Index into <page>SlashCo.SlasherClass</page></arg>
	</args>
	<rets>
		<ret name="color" type="Color">The color to display the class with</ret>
	</rets>
</function>