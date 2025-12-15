<title>GameData</title>
<structure>
	<realm>Shared</realm>
	<description>
		A Table containing various values as a performance improvement and for autorefresh support.<br>
		The following fields exist by default.<br>
		<note>
			All Shared values are networked when a player joins the game, but only once, changing them while playing has no effect except for `MaxPlayers`.<br>
		</note>
	</description>
	<fields>
		<item name="Map" type="string">The name of the current map - value of [game.GetMap()](https://wiki.facepunch.com/gmod/game.GetMap)</item>
		<item name="Lobby" type="string" default="sc_lobby">The name of the lobby map</item>
		<item name="IsLobby" type="boolean">`true` if the current map is the lobby</item>
		<item name="BaseMaxSurvivors" type="number" default="6">Default number of max survivors</item>
		<item name="BaseMaxPlayers" type="number" default="7">Default number of max players</item>
		<item name="MaxPlayers" type="number">(Always Networked) Current number of max players - changed by <page>slashco_maxplayers</page></item>
		<item name="TotalSlots" type="number">How many slots the server has - value of [game.MaxPlayers()](https://wiki.facepunch.com/gmod/game.MaxPlayers)</item>
		<item name="IsSinglePlayer" type="boolean">`true` if the game is singleplayer - value of [game.SinglePlayer()](https://wiki.facepunch.com/gmod/game.SinglePlayer)</item>
		<item name="IsLan" type="boolean">`true` if the game is a lan game - checks if `sv_lan` is enabled, will enable `-multirun` support</item>
		<item name="World" type="Entity" default="NULL">The world entity</item>
		<item name="IsNewPlayer" type="boolean" realm="Client">`true` if the local player is new to the game. This enables some UI hints for the first few rounds.</item>
		<item name="LocalPlayer" type="Entity" default="NULL" realm="Client">The local player - Same as [LocalPlayer()](https://wiki.facepunch.com/gmod/LocalPlayer) but faster to access</item>
		<item name="LocalEntIndex" type="number" realm="Client">The local player's entity index</item>
		<item name="LocalSteamID" type="string" realm="Client">The local player's SteamID</item>
		<item name="LocalSteamID64" type="string" realm="Client">The local player's SteamID64</item>
	</fields>
</structure>