<function name="RefundSurvivorItems" parent="SlashCo" type="libraryfunc">
	<description>
		Refunds the points a Survivor spent on their items, used when that Survivor gets turned into a Slasher instead.<br>
		Reads the items from the saved round database, refunds their price and removes the Survivor's saved item entry. Does nothing if the player has no saved items or a total refund of 0.<br>
		Must only be used in-round, not while in the lobby.
	</description>
	<realm>Server</realm>
	<group>Round</group>
	<args>
		<arg name="ply" type="Player|string">The player to refund, or their SteamID64 if they are not connected</arg>
	</args>
</function>
