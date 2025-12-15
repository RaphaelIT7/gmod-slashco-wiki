<function name="SetupLanOverrides" parent="SlashCo" type="libraryfunc">
	<description>
		<internal>
			Called when a game is hosted with `sv_lan 1` to setup proper `-multirun` support for development and testing<br>
		</internal>

		Using sv_lan we can use -multirun and join the game with multiple gmod instances,<br>
		but now we have to ensure that they won't use the same steamid's.<br>
		Right now we change these function and we add the userid to allow for multiple multirun instances to work without colliding with each other.<br>
		- PLAYER:SteamID()<br>
		- PLAYER:SteamID64()<br>
		- PLAYER:OwnerSteamID64()<br>
		- PLAYER:UniqueID()<br>
	</description>
	<realm>Shared</realm>
</function>