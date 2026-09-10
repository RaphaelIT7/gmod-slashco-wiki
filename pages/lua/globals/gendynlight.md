<function name="GenDynLight" parent="" type="libraryfunc">
	<description>
		Creates a green-tinted [DynamicLight](https://wiki.facepunch.com/gmod/Global.DynamicLight) for the given entity index, used by the night vision goggles item to light up the area in front of the wearer.<br>
		Offsets the index by `MAX_EDICT` to avoid clashing with other dynamic lights.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="entIndex" type="number">Entity index to associate the light with.</arg>
	</args>
	<rets>
		<ret name="dlight" type="table" optional>The dynamic light structure, or `nil` if the light limit was reached.</ret>
	</rets>
</function>
