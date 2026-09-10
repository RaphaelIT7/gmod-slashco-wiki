<function name="RemoveSpeedEffect" parent="Player" type="classfunc">
	<description>
		Removes a previously added named speed modifier and recalculates the player's movement speed via <page>UpdateSpeed</page>.
	</description>
	<realm>Server</realm>
	<group>Movement</group>
	<args>
		<arg name="key" type="string">Identifier used in <page>AddSpeedEffect</page>.</arg>
	</args>
</function>
