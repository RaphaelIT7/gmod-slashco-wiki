<function name="BroadcastGlobalData" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Networks the `SCInfo` table to the given player, or to everyone if no player is specified.
	</description>
	<realm>Server</realm>
	<group>Networking</group>
	<args>
		<arg name="ply" type="Player" optional>The player to send the data to. If omitted, it is broadcast to everyone.</arg>
	</args>
</function>
