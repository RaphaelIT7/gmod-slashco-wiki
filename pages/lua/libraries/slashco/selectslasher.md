<function name="SelectSlasher" parent="SlashCo" type="libraryfunc">
	<description>
		Assigns a slasher ID to a player's SteamID64 for the current round, before they've actually spawned as a slasher.<br>
		Also precaches the slasher via <page>SlashCo.PrecacheSlasher</page>.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="slasherID" type="string">The registered name/ID of the slasher</arg>
		<arg name="steamID64" type="string">The SteamID64 of the player to assign the slasher to</arg>
	</args>
</function>
