<function name="FlashWindows" parent="SlashCo" type="libraryfunc">
	<description>
		Flashes the game window to notify the user that something has happened in-game.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="ply" type="Player|table<Player>" default="nil">
			Does nothing on the Client.<br>
			On the Server this can be a Player, a table of players or `nil` to send it to everyone.<br>
		</arg>
	</args>
</function>