<function name="TranslateSlasherClass" parent="" type="libraryfunc">
	<description>
		Returns the name of a slasher class from its ID, as registered via `SlashCo.AddSlasherClass`.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="id" type="number">A value from `SlashCo.SlasherClass`</arg>
	</args>
	<rets>
		<ret name="name" type="string">The name of the slasher class, or `nil` if the ID doesn't exist</ret>
	</rets>
</function>
