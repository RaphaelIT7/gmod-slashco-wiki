<function name="DisablePerk" parent="SlashCo" type="libraryfunc">
	<description>
		Requests that the server disable an active perk for the local player.<br>
		Does nothing if the player does not currently have the perk active.<br>
		Can only be processed while in the lobby.
	</description>
	<realm>Client</realm>
	<group>Perks</group>
	<args>
		<arg name="perkID" type="string">ID of the perk to disable</arg>
	</args>
</function>