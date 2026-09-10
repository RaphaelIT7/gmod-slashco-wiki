<function name="AddRoundPoints" parent="Player" type="classfunc">
	<description>
		Adds a round point entry to the player under the given `key`, contributing to their total score shown at the end of the round.<br>
		Multiple calls with the same `key` stack instead of replacing each other. On the server, the added points are networked to the player.
	</description>
	<realm>Shared</realm>
	<group>Round Points</group>
	<args>
		<arg name="key" type="string">Round point category, e.g. `slasher_kill` or `objective`. Determines the default `amount` when it is omitted.</arg>
		<arg name="amount" type="number" optional>The amount of points to add. Defaults to a value based on `key` (or `5` if `key` is unknown).</arg>
	</args>
</function>
