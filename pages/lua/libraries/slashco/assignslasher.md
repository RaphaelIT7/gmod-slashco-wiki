<function name="AssignSlasher" parent="SlashCo" type="libraryfunc">
	<description>
		Forces a player to become a Slasher for the upcoming round while in the lobby.<br>
		Accepts a plain SteamID or a SteamID64. If picking has already finished, the player is immediately asked to pick their Slasher.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
	<args>
		<arg name="steamid" type="string">The SteamID or SteamID64 of the player to assign as Slasher</arg>
		<arg name="forceSlasherID" type="string" optional>If set, forces this specific Slasher ID onto the player instead of letting them pick one</arg>
	</args>
</function>
