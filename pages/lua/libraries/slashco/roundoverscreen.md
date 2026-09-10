<function name="RoundOverScreen" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Ends the round: stops the helicopter sound, the background music and all <page>SlashCo.AudioSystem.StopSound</page> sounds, awards round points to survivors and slashers based on `state`, then sends the round-over screen data to everyone.
	</description>
	<realm>Server</realm>
	<group>Round</group>
	<args>
		<arg name="state" type="SlashCo.RoundState">The outcome the round ended with.</arg>
	</args>
</function>
