<function name="GetKeyButtonName" parent="SlashCo" type="libraryfunc">
	<description>
		Gets the currently bound button for the bind and translates it using [input.GetKeyName](https://wiki.facepunch.com/gmod/input.GetKeyName) and makes the result uppercase.<br>
		Useful for UI when wanting to display the key for an action.<br>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="name" type="string">Bind</arg>
	</args>
	<rets>
		<ret name="buttonName" type="string">
			The translated button name or `UNKNOWN` on failure
		</ret>
	</rets>
</function>