<function name="GetFoodHealMultiplier" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the healing multiplier that food items should apply for the given player, based on their active perks.<br>
		The "Healthy" perk adds `0.5`, the "Glutton" perk subtracts `0.5`, and the result is never lower than `0`.<br>
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="ply" type="Player">The player to check</arg>
	</args>
	<rets>
		<ret name="multiplier" type="number">The healing multiplier. `1` if the player is invalid or not a Survivor.</ret>
	</rets>
</function>
