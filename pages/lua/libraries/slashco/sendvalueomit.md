<function name="SendValueOmit" parent="SlashCo" type="libraryfunc">
	<description>
		Networks any amount of values to all clients except the specified player.
	</description>
	<realm>Server</realm>
	<group>Networking</group>
	<args>
		<arg name="ply" type="Player">The client to exclude from the network message.</arg>
		<arg name="message" type="string">The message identifier to send.</arg>
		<arg name="..." type="any">The values to network.</arg>
	</args>
</function>