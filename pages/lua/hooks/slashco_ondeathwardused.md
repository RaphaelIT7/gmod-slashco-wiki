<function name="SlashCo:OnDeathWardUsed" parent="" type="hook">
	<description>
		Called when a Survivor's death is prevented by the DeathWard item, right after the item is consumed and dropped but before the player is made invisible and invincible for their respawn delay.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ply" type="Player">The survivor who used the DeathWard</arg>
	</args>
</function>
