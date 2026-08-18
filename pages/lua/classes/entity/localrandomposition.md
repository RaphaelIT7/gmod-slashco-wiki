<function name="LocalRandomPosition" parent="Entity" type="classfunc">
	<description>
		<bug>
			Since its creation this function never worked properly due to it never returning the value!
		</bug>
		Get a position near an entity that it can be near.<br>
		Internally just calls <page>SlashCo.LocalizedTraceHullLocator</page>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="minRange" type="number">minimum distance away</arg>
		<arg name="range" type="number" default="minRange">
			maximum distance away<br>
			If range is unspecified, minRange becomes the range value and the minimum range becomes 25
		</arg>
		<arg name="offset" type="number" default="0">
			offset the center of the search this many units way from the entity in the direction they are looking
		</arg>
	</args>
	<rets>
		<ret name="randomPos" type="Vector">A found random position or `nil` on failure</ret>
	</rets>
</function>