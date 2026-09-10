<function name="GetItem" parent="Player" type="classfunc">
	<description>
		Returns the name of the item the player currently has equipped in the given slot.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="slot" type="string">`"item"` or `"item2"`.</arg>
	</args>
	<rets>
		<ret name="item" type="string">Name of the equipped item, or `"none"` if the slot is empty.</ret>
	</rets>
</function>
