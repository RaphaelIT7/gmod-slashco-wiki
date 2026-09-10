<function name="StackedItemValue" parent="Player" type="classfunc">
	<description>
		Sums the given field across every source that can affect the player: their active perks, active effects, and both item slots.<br>
		Returns `initialValue` if nothing contributes to the sum, otherwise the summed value clamped to a minimum of `0.1`.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="valueName" type="string">Field name to sum across perks, effects and items.</arg>
		<arg name="initialValue" type="any">Value returned if nothing contributes to the sum.</arg>
	</args>
	<rets>
		<ret name="value" type="number">The summed value.</ret>
	</rets>
</function>
