<function name="SlashCo:PlayerDeath" parent="" type="hook">
	<description>
		Called once a Survivor has run out of lives and is about to be turned into a ragdoll and moved to the Spectator team.<br>
		Also called from `GM:PlayerSilentDeath` for silent deaths, which skip the ragdoll/spectator handling.<br>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="victim" type="Player">The Survivor who died</arg>
	</args>
</function>
