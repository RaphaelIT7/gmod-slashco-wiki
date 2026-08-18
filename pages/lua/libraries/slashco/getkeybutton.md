<function name="GetKeyButton" parent="SlashCo" type="libraryfunc">
	<description>
		Looks up the given Bind and returns the [BUTTON_CODE](https://wiki.facepunch.com/gmod/Enums/BUTTON_CODE)
	</description>
	<realm>Client</realm>
	<args>
		<arg name="name" type="string">Bind</arg>
	</args>
	<rets>
		<ret name="button" type="number">[BUTTON_CODE](https://wiki.facepunch.com/gmod/Enums/BUTTON_CODE) or `-1` on failure</ret>
	</rets>
</function>