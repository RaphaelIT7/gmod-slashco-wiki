<function name="GetConsumableEffectDuration" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the duration a consumable's effect should last for the given player, based on their active perks.<br>
		Doubles the duration if the "Glutton" perk is active.<br>
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="ply" type="Player">The player to check</arg>
		<arg name="duration" type="number">The base effect duration, in seconds</arg>
	</args>
	<rets>
		<ret name="duration" type="number">The adjusted duration. Unchanged if the player is invalid or not a Survivor.</ret>
	</rets>
</function>
