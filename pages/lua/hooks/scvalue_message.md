<function name="scValue_<message>" parent="" type="hook">
	<description>
		Called when a value message sent with <page>SlashCo.SendValue</page> is received.<br>
		`<message>` is replaced with the message name that was passed to <page>SlashCo.SendValue</page>, e.g. `scValue_addRoundPoints`.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="ply" type="Player">
			**This argument doesn't exist on the client!**<br>
			The player that sent the value.
		</arg>
		<arg name="..." type="any">The networked values, in the order they were passed to <page>SlashCo.SendValue</page>.</arg>
	</args>
</function>
