<function name="SetItem" parent="Player" type="classfunc">
	<description>
		Sets the item (or effect) the player has equipped in the given slot.<br>
		If `slot` is omitted, it is inferred from `item`'s <page>ITEM#IsSecondary</page> field (`"item2"` if set, `"item"` otherwise); if `item` isn't a registered item, the call does nothing.<br>
		<note>
			Throws a Lua error if `slot` isn't `"item"`/`"item2"`, or if `item` isn't `"none"` and isn't a registered <page>ITEM</page> or <page>EFFECT</page>.
		</note>
	</description>
	<realm>Server</realm>
	<group>Items</group>
	<args>
		<arg name="slot" type="string" optional>`"item"` or `"item2"`. Inferred from `item` when omitted.</arg>
		<arg name="item" type="string">Name of the item/effect to equip, or `"none"` to clear the slot.</arg>
	</args>
</function>
