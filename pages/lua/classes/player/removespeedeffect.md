<function name="RemoveSpeedEffect" parent="Player" type="classfunc">
	<description>
		Removes a previously added named speed modifier and recalculates the player's movement speed via <page>Player:UpdateSpeed</page>.
	</description>
	<realm>Server</realm>
	<group>Movement</group>
	<args>
		<arg name="key" type="string">Identifier used in <page>Player:AddSpeedEffect</page>.</arg>
	</args>
</function>
