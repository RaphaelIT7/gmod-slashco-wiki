<function name="CanEatPizza" parent="SlashCo" type="libraryfunc">
	<description>
		Checks if the player is a Survivor with the "Healthy" perk active.
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="ply" type="Player">The player to check</arg>
	</args>
	<rets>
		<ret name="canEat" type="boolean">Whether the player can eat pizza</ret>
	</rets>
</function>
