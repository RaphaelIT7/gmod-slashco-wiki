<function name="AddSpeedEffect" parent="Player" type="classfunc">
	<description>
		Registers a named speed modifier for the player and immediately recalculates their movement speed via <page>Player:UpdateSpeed</page>.<br>
		If multiple speed effects are active, the one with the highest priority wins.
	</description>
	<realm>Server</realm>
	<group>Movement</group>
	<args>
		<arg name="key" type="string">Unique identifier for this speed effect.</arg>
		<arg name="speed" type="number">Run speed to apply.</arg>
		<arg name="priority" type="number">Determines which active speed effect takes precedence.</arg>
	</args>
</function>
