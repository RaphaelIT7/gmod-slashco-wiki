<function name="AddSlasherAnger" parent="SlashCo" type="libraryfunc">
	<description>
		Adds to the given slasher's anger value, clamped between `0` and `100`.<br>
		This is intentionally server-only to avoid desync.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="slasher" type="Player">The slasher to modify the anger of</arg>
		<arg name="anger" type="number">The amount to add. Can be negative to reduce the anger</arg>
	</args>
</function>
