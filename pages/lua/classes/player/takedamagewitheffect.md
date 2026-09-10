<function name="TakeDamageWithEffect" parent="Player" type="classfunc">
	<description>
		Plays a damage sound via <page>Player:PlayDamageSound</page> (its range scaled by the damage amount) and then applies damage to the player with `TakeDamage`.
	</description>
	<realm>Shared</realm>
	<group>Damage</group>
	<args>
		<arg name="damageAmount" type="number">The amount of damage to apply</arg>
		<arg name="attacker" type="Entity">The entity responsible for the damage</arg>
		<arg name="inflictor" type="Entity">The entity that inflicted the damage</arg>
	</args>
</function>
