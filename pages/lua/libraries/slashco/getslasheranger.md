<function name="GetSlasherAnger" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the current anger value of the given slasher.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
	<args>
		<arg name="slasher" type="Player">The slasher to get the anger value of</arg>
	</args>
	<rets>
		<ret name="anger" type="number">The slasher's current anger, from `0` to `100`</ret>
	</rets>
</function>
