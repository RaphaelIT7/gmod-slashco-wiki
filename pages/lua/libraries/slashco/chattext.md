<function name="ChatText" parent="SlashCo" type="libraryfunc">
	<description>
		Prints a translated message to the local chat, following the rules of [chat.AddText](https://wiki.facepunch.com/gmod/chat.AddText).<br>
		String values are passed through <page>SlashCo.Language</page> before being printed. To pass a translation key that needs formatting arguments, use a table: `{key, ...}`.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="..." type="any">The values to print, following the same rules as `chat.AddText`.</arg>
	</args>
</function>