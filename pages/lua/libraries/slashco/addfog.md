<function name="AddFog" parent="SlashCo" type="libraryfunc">
	<description>
		Adds or updates a fog entry in the global fog data and networks the change to all clients.<br>
		If an identical fog entry already exists, no update is sent.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="info" type="FogInfo">Fog configuration to add or update</arg>
	</args>
</function>