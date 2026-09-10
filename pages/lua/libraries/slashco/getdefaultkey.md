<function name="GetDefaultKey" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the default <page>BUTTON_CODE</page> for the given keyboard bind, as defined in `SlashCo.KeyboardBinds`, ignoring any bindings the player has changed.
	</description>
	<realm>Shared</realm>
	<group>Keyboard</group>
	<args>
		<arg name="name" type="string">Name of the bind, e.g. `"PING"` (a key in `SlashCo.KeyboardBinds`).</arg>
	</args>
	<rets>
		<ret name="button" type="BUTTON_CODE">The default button for the bind, or `nil` if the bind name doesn't exist.</ret>
	</rets>
</function>