<function name="ChatText" parent="Player" type="classfunc">
	<description>
		Sends a translated chat message to this player, following the same rules as <page>SlashCo.ChatText</page>.<br>
		To pass a translation key that needs formatting arguments, use a table: `{key, ...}`.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="..." type="any">The values to print, following the same rules as <page>SlashCo.ChatText</page>.</arg>
	</args>
</function>