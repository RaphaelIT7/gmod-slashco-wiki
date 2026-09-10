<function name="SetupExpectedPlayersFailsafe" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Enables the ambient loading music and starts the failsafe timer that forces a new Slasher selection if not all expected players connect within 300 seconds.<br>
		Also listens for disconnecting players so they can be marked as disconnected inside <page>SlashCo.CurRound</page>.ExpectedPlayers.
	</description>
	<realm>Server</realm>
	<group>Round</group>
</function>
