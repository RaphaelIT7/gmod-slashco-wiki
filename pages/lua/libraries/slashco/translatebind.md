<function name="TranslateBind" parent="SlashCo" type="libraryfunc">
	<description>
		Looks up the given Bind and returns the name.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="name" type="string">Bind</arg>
	</args>
	<rets>
		<ret name="bindName" type="string">
			The name for the bind. Commonly returns a language key to translate using <page>SlashCo.Language</page>
		</ret>
	</rets>
</function>