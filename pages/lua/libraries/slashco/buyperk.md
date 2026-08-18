<function name="BuyPerk" parent="SlashCo" type="libraryfunc">
	<description>
		Requests that the server purchase a perk for the local player.<br>
		Does nothing if the player already owns the perk.<br>
		The server validates the perk, its price, and the player's level before purchasing it.<br>
		Can only be processed while in the lobby.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="perkID" type="string">ID of the perk to purchase</arg>
	</args>
</function>