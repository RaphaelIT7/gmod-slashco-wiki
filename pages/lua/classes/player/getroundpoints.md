<function name="GetRoundPoints" parent="Player" type="classfunc">
	<description>
		Returns the total points and number of entries the player has recorded under the given `key`.
	</description>
	<realm>Shared</realm>
	<group>Round Points</group>
	<args>
		<arg name="key" type="string">Round point category to look up.</arg>
	</args>
	<rets>
		<ret name="total" type="number">Sum of all points recorded for `key`, or `0` if none are recorded.</ret>
		<ret name="count" type="number" optional>Amount of point entries that make up `total`. Not returned if `key` has no recorded points.</ret>
	</rets>
</function>
