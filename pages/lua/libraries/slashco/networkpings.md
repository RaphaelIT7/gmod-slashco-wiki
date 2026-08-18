<function name="NetworkPings" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Networks all existing pings to the given player<br>
		This is expensive and should only be done when needed
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ply" type="Player|table<Player>">The target player</arg>
	</args>
</function>