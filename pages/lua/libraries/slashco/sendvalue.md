<function name="SendValue" parent="SlashCo" type="libraryfunc">
	<description>
		On the server it networks any amount of values to the specified client, or broadcasts them to all clients when no player is specified<br>
		<br>
		On the client it networks any amount of values to the server<br>
	</description>
	<realm>Shared</realm>
	<group>Networking</group>
	<args>
		<arg name="ply" type="Player" optional>
			**This argument doesn't exist on the client!**<br>
			The client to send the values to. If omitted, the values are broadcast to all clients.
		</arg>
		<arg name="message" type="string">The message identifier to send.</arg>
		<arg name="..." type="any">The values to network.</arg>
	</args>
</function>