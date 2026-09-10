<function name="GetNameColor" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the color used to display a slasher's name in UI.<br>
		Returns the "unknown" color if `name` is `"Unknown"`, otherwise the regular "known" color.
	</description>
	<realm>Shared</realm>
	<group>Colors</group>
	<args>
		<arg name="name" type="string">The slasher's name</arg>
	</args>
	<rets>
		<ret name="color" type="Color">The color to display the name with</ret>
	</rets>
</function>