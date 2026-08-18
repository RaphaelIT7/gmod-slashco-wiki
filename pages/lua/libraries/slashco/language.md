<function name="Language" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the localized string associated with the given key.<br>
		Additional arguments are passed to [string.format](https://wiki.facepunch.com/gmod/string.format) when provided.<br>
		String arguments are recursively passed through SlashCo.Language before formatting.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="key" type="string">The language key to look up.</arg>
		<arg name="..." type="any" optional>
			Arguments used to format the localized string.<br>
			String arguments are resolved through SlashCo.Language before being passed to string.format.
		</arg>
	</args>
	<rets>
		<ret name="result" type="string">The localized and formatted string.</ret>
	</rets>
</function>